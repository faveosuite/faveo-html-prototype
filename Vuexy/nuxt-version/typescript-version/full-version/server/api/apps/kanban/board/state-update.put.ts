import { database } from '@/server/fake-db/apps/kanban'
import type { KanbanBoard } from '@/server/fake-db/apps/kanban/types'

export default defineEventHandler(async event => {
  const boardState = await readBody(event) as number[]

  // sort board as per boardState
  const sortedBoards: KanbanBoard[] = boardState.map(boardId => {
    return database.boards.find(board => board.id === boardId) as KanbanBoard
  })

  database.boards = sortedBoards
})
