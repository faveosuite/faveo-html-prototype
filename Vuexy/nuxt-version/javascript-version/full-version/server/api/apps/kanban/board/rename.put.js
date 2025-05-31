import { database } from '@/server/fake-db/apps/kanban/index'

export default defineEventHandler(async event => {
  const { boardId, newName } = await readBody(event)

  database.boards = database.boards.map(board => {
    if (board.id === boardId)
      board.title = newName
    
    return board
  })
  setResponseStatus(event, 201)
  
  return { body: { message: `Rename Board with id ${newName}` } }
})
