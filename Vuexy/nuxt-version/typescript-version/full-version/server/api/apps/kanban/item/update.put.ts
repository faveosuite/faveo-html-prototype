import { database } from '@/server/fake-db/apps/kanban/'
import type { EditKanbanItem } from '@/server/fake-db/apps/kanban/types'

export default defineEventHandler(async event => {
  const { item: task } = await readBody(event) as EditKanbanItem

  database.items.forEach(item => {
    if (task && item.id === task.id) {
      item.title = task.title
      item.attachments = task.attachments
      item.comments = task.comments
      item.commentsCount = task.commentsCount
      item.dueDate = task.dueDate
      item.labels = task.labels
      item.members = task.members
    }
  })

  setResponseStatus(event, 201)
})
