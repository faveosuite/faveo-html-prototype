import { database } from '@/server/fake-db/apps/kanban/index'

export default defineEventHandler(async event => {
  const boardId = getIntId(event, 'User id is required to get board details')
  const boardIndex = database.boards.findIndex(board => board.id === boardId)
  if (boardIndex === -1) {
    setResponseStatus(event, 404)
    
    return { body: { message: `Board with id ${boardId} not found` } }
  }
  database.boards.splice(boardIndex, 1)
  
  return { body: { message: `Board with id ${boardId} deleted` } }
})
