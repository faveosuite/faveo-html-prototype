import { database } from '@/server/fake-db/apps/kanban/index'
import type { RenameKanbanBoard } from '@/server/fake-db/apps/kanban/types'

export default defineEventHandler(async event => {
  const { boardId, newName } = await readBody(event) as RenameKanbanBoard

  database.boards = database.boards.map(board => {
    if (board.id === boardId)
      board.title = newName

    return board
  })

  setResponseStatus(event, 201)

  return { body: { message: `Rename Board with id ${newName}` } }
})
