import { database } from '@/server/fake-db/apps/kanban/'

export default defineEventHandler(async event => {
  const { boardId, boardName, itemTitle } = await readBody(event)
  const itemId = database.items[database.items.length - 1].id + 1
  if (itemTitle && boardName) {
    // Add the new item to the items list
    database.items.push({
      id: itemId,
      title: itemTitle,
      attachments: 0,
      comments: '',
      commentsCount: 0,
      dueDate: '',
      labels: [],
      members: [],
    })


    // find the index of board in the database
    const id = database.boards.findIndex(board => board.id === boardId)


    // Add the new item to the board
    database.boards[id].itemsIds.push(itemId)
  }
  setResponseStatus(event, 201)
})
