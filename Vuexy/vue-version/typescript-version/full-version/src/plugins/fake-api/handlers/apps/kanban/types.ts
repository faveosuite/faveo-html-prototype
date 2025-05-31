// Kanban Data
interface Member { name: string; img: string }

export interface KanbanItem {
  id: number
  title: string
  comments?: string
  dueDate?: string
  labels?: string[]
  members?: Member[]
  attachments?: number
  commentsCount?: number
  image?: string
}
export interface KanbanBoard {
  id: number
  title: string
  itemsIds: number[]
}

export interface RenameKanbanBoard {
  oldName: string
  boardId: number
  newName: string
}

export interface AddNewKanbanItem {
  itemTitle: string
  boardName: string
  boardId: number
}

export interface EditKanbanItem {
  item: KanbanItem | undefined
  boardName: string
  boardId: number
}

export interface KanbanData {
  boards: KanbanBoard[]
  items: KanbanItem[]
}

export interface KanbanState {
  ids: number[]
  boardId: number
}
