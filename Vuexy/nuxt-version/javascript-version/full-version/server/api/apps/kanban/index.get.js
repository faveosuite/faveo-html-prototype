import { database } from '@/server/fake-db/apps/kanban/index'

export default defineEventHandler(() => {
  return database
})
