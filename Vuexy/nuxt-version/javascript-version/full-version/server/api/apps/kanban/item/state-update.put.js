import { database } from '@/server/fake-db/apps/kanban/'

export default defineEventHandler(async event => {
  const { boardId, ids } = await readBody(event)

  database.boards.forEach(board => {
    if (board.id === boardId)
      board.itemsIds = ids
  })
  setResponseStatus(event, 201)
})
