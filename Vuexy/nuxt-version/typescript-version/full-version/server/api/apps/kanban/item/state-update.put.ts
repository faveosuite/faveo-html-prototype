import { database } from '@/server/fake-db/apps/kanban/'
import type { KanbanState } from '@/server/fake-db/apps/kanban/types'

export default defineEventHandler(async event => {
  const { boardId, ids } = await readBody(event) as KanbanState

  database.boards.forEach(board => {
    if (board.id === boardId)
      board.itemsIds = ids
  })

  setResponseStatus(event, 201)
})
