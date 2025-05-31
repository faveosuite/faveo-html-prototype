import { database } from '@/server/fake-db/apps/kanban/index'

export default defineEventHandler(async event => {
  const { title } = await readBody(event)

  const getNewBoardId = () => {
    const newBoardId = database.boards.length + 1
    if (!(database.boards.some(board => board.id === newBoardId)))
      return newBoardId
    else
      return newBoardId + 1
  }

  if (database.boards.some(board => board.title === title)) {
    setResponseStatus(event, 204)
  }
  else {
    database.boards.push({
      id: getNewBoardId(),
      title,
      itemsIds: [],
    })
    setResponseStatus(event, 201)
  }
})
