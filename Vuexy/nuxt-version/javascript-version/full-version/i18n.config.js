import { cookieRef } from '@layouts/stores/config'
import { themeConfig } from '@themeConfig'

const messages = Object.fromEntries(
  Object.entries(
    import.meta.glob('@/plugins/i18n/locales/*.json', { eager: true }))
    .map(([key, value]) => [key.slice(-7, -5), value.default]),
)

export default defineI18nConfig(() => ({
  legacy: false,
  locale: cookieRef('language', themeConfig.app.i18n.defaultLocale).value,
  fallbackLocale: 'en',
  messages,
}))
