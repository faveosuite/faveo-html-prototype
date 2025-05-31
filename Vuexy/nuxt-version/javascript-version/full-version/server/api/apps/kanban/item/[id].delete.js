import { database } from '@/server/fake-db/apps/kanban'

export default defineEventHandler(event => {
  const itemId = getIntId(event, 'Item id is required to get item details')

  database.items = database.items.filter(item => item.id !== itemId)
  database.boards.forEach(board => {
    board.itemsIds = board.itemsIds.filter(id => id !== itemId)
  })
  setResponseStatus(event, 204)
})
