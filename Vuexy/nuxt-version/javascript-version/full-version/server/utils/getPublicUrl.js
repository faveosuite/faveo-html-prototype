import { ensurePrefix } from '@antfu/utils'

export const getPublicUrl = path => {
  const baseUrl = process.env.NUXT_APP_BASE_URL ?? ''
  const pathWithBaseUrl = `${baseUrl}${path}`
  
  return `${ensurePrefix('/', pathWithBaseUrl)}`.replaceAll('//', '/')
}
