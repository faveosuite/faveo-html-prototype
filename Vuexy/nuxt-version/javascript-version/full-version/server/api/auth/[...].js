import { NuxtAuthHandler } from '#auth'
import CredentialsProvider from 'next-auth/providers/credentials'

// import GoogleProvider from 'next-auth/providers/google'
// const runtimeConfig = useRuntimeConfig()
export default NuxtAuthHandler({
  secret: process.env.AUTH_SECRET,
  providers: [
    // GoogleProvider.default({
    //   clientId: runtimeConfig.public.AUTH_PROVIDER_GOOGLE_CLIENT_ID,
    //   clientSecret: runtimeConfig.AUTH_PROVIDER_GOOGLE_CLIENT_SECRET,
    // }),
    // @ts-expect-error You need to use .default here for it to work during SSR. May be fixed via Vite at some point
    CredentialsProvider.default({
      name: 'Credentials',
      credentials: {}, // Object is required but can be left empty.
      async authorize(credentials) {
        const { user } = await $fetch(`${process.env.NUXT_PUBLIC_API_BASE_URL ?? '/api'}/login/`, {
          method: 'POST',
          body: JSON.stringify(credentials),
        }).catch(err => {
          throw createError({
            statusCode: err.statusCode || 403,
            statusMessage: JSON.stringify(err.data),
          })
        })

        return user || null
      },
    }),
  ],
  pages: {
    signIn: '/login',
  },
  callbacks: {
        
    // @ts-ignore tsc cli gives error due to unknown reason even with correct types
    jwt: async ({ token, user }) => {
      /*
             * For adding custom parameters to user in session, we first need to add those parameters
             * in token which then will be available in the `session()` callback
             */
      if (user) {
        token.username = user.username
        token.fullName = user.fullName
        token.avatar = user.avatar
        token.abilityRules = user.abilityRules
        token.role = user.role
      }
      
      return token
    },
        
    // @ts-ignore tsc cli gives error due to unknown reason even with correct types
    async session({ session, token }) {
      // Add custom params to user in session which are added in `jwt()` callback via `token` parameter
      if (session.user) {
        session.user.username = token.username
        session.user.fullName = token.fullName
        session.user.avatar = token.avatar
        session.user.abilityRules = token.abilityRules
        session.user.role = token.role
      }
      
      return session
    },
  },
})
