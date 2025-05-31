import { database } from '@/server/fake-db/apps/kanban'

export default defineEventHandler(async event => {
  const boardState = await readBody(event)


  // sort board as per boardState
  const sortedBoards = boardState.map(boardId => {
    return database.boards.find(board => board.id === boardId)
  })

  database.boards = sortedBoards
})
