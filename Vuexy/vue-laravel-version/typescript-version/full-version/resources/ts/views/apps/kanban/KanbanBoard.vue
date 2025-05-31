<script setup lang="ts">
import { animations, remapNodes } from '@formkit/drag-and-drop'
import { dragAndDrop } from '@formkit/drag-and-drop/vue'
import { VForm } from 'vuetify/components/VForm'
import KanbanBoardEditDrawer from '@/views/apps/kanban/KanbanBoardEditDrawer.vue'
import KanbanItems from '@/views/apps/kanban/KanbanItems.vue'
import type { AddNewKanbanItem, EditKanbanItem, KanbanBoard, KanbanData, KanbanState, RenameKanbanBoard } from '@db/apps/kanban/types'

const props = withDefaults(defineProps<{
  kanbanData: KanbanData
  groupName?: string
}>(), {
  groupName: 'kanban',
})

const emit = defineEmits<{
  (e: 'addNewBoard', value: string): void
  (e: 'renameBoard', value: RenameKanbanBoard): void
  (e: 'deleteBoard', value: number): void
  (e: 'addNewItem', value: AddNewKanbanItem): void
  (e: 'editItem', value: EditKanbanItem): void
  (e: 'deleteItem', value: EditKanbanItem): void
  (e: 'updateItemsState', value: KanbanState): void
  (e: 'updateBoardState', value: number[]): void
}>()

const kanbanWrapper = ref<HTMLElement>()
const localKanbanData = ref<KanbanBoard[]>(props.kanbanData.boards)
const isKanbanBoardEditVisible = ref(false)

const isAddNewFormVisible = ref(false)
const refAddNewBoard = ref<VForm>()
const boardTitle = ref<string>('')

const editKanbanItem = ref<EditKanbanItem>()

// 👉 Add new board function that emit the name and id of new board
const addNewBoard = () => {
  refAddNewBoard.value?.validate().then(valid => {
    if (valid.valid) {
      emit('addNewBoard', boardTitle.value)
      isAddNewFormVisible.value = false
      boardTitle.value = ''
    }
  })
}

// 👉 emit delete board event
const deleteBoard = (boardId: number) => {
  emit('deleteBoard', boardId)
}

// 👉 emit rename board event
const renameBoard = (boardName: RenameKanbanBoard) => {
  emit('renameBoard', boardName)
}

// 👉 emit add new task event
const addNewItem = (item: AddNewKanbanItem) => {
  emit('addNewItem', item)
}

// 👉 edit kanban item
const editKanbanItemFn = (item: EditKanbanItem | undefined) => {
  if (item) {
    editKanbanItem.value = item
    isKanbanBoardEditVisible.value = true
  }
}

// 👉 update kanban ids
const updateStateFn = (kanbanState: KanbanState) => {
  emit('updateItemsState', kanbanState)
}

// 👉 initialize the drag and drop
dragAndDrop({
  parent: kanbanWrapper,
  values: localKanbanData,
  dragHandle: '.drag-handler',
  plugins: [animations()],
})

// assign the new kanban data to the local kanban data
watch(() => props, () => {
  localKanbanData.value = props.kanbanData.boards

  // 👉 remap the nodes when we rename the board: https://github.com/formkit/drag-and-drop/discussions/52#discussioncomment-8995203
  remapNodes(kanbanWrapper.value as any)
}, { deep: true })

// 👉 emit updated task to parent
const emitUpdatedTaskFn = (item: EditKanbanItem) => {
  emit('editItem', item)
}

// 👉  delete kanban item
const deleteKanbanItemFn = (item: EditKanbanItem) => {
  emit('deleteItem', item)
}

// 👉 update boards data when it sort
watch(localKanbanData, () => {
  const getIds = localKanbanData.value.map(board => board.id)

  emit('updateBoardState', getIds)
}, { deep: true })

// 👉 validators for add new board
const validateBoardTitle = () => {
  return props.kanbanData.boards.some(board => boardTitle.value && board.title.toLowerCase() === boardTitle.value.toLowerCase()) ? 'Board title already exists' : true
}

const hideAddNewForm = () => {
  isAddNewFormVisible.value = false
  refAddNewBoard.value?.reset()
}

// close add new item form when you loose focus from the form
onClickOutside(refAddNewBoard, hideAddNewForm)
</script>

<template>
  <div class="kanban-main-wrapper d-flex gap-4 h-100">
    <!-- 👉 kanban render  -->
    <div
      ref="kanbanWrapper"
      class="d-flex ga-6"
    >
      <template
        v-for="kb in localKanbanData"
        :key="kb.id"
      >
        <!-- 👉 kanban task render -->
        <KanbanItems
          :group-name="groupName"
          :kanban-ids="kb.itemsIds"
          :board-name="kb.title"
          :board-id="kb.id"
          :kanban-items="kanbanData.items"
          :kanban-data="kanbanData"
          @delete-board="deleteBoard"
          @rename-board="renameBoard"
          @add-new-item="addNewItem"
          @edit-item="editKanbanItemFn"
          @update-items-state="updateStateFn"
          @delete-item="deleteKanbanItemFn"
        />
      </template>
    </div>

    <!-- 👉 add new form  -->
    <div
      class="add-new-form text-no-wrap"
      style="inline-size: 10rem;"
    >
      <h6
        class="text-lg font-weight-medium cursor-pointer"
        @click="isAddNewFormVisible = !isAddNewFormVisible"
      >
        <VIcon
          size="18"
          icon="tabler-plus"
        /> Add New
      </h6>

      <!-- 👉 Form -->
      <VForm
        v-if="isAddNewFormVisible"
        ref="refAddNewBoard"
        class="mt-4"
        validate-on="submit"
        @submit.prevent="addNewBoard"
      >
        <div class="mb-4">
          <VTextField
            v-model="boardTitle"
            :rules="[requiredValidator, validateBoardTitle]"
            autofocus
            placeholder="Add Board Title"
            @keydown.esc="hideAddNewForm"
          />
        </div>
        <div class="d-flex gap-3">
          <VBtn
            size="small"
            type="submit"
          >
            Add
          </VBtn>
          <VBtn
            size="small"
            variant="tonal"
            color="secondary"
            type="reset"
            @click="hideAddNewForm"
          >
            Cancel
          </VBtn>
        </div>
      </VForm>
    </div>
  </div>

  <!-- kanban edit drawer -->
  <KanbanBoardEditDrawer
    v-model:is-drawer-open="isKanbanBoardEditVisible"
    :kanban-item="editKanbanItem"
    @update:kanban-item="emitUpdatedTaskFn"
    @delete-kanban-item="deleteKanbanItemFn"
  />
</template>

<style lang="scss">
@use "@styles/variables/_vuetify.scss" as vuetify;

.kanban-main-wrapper {
  overflow: auto hidden;
  margin-inline-start: -0.6rem;
  min-block-size: calc(100vh - 10.5rem);
  padding-inline-start: 0.6rem;

  .kanban-board {
    inline-size: 16.875rem;
    min-inline-size: 16.875rem;

    .kanban-board-drop-zone {
      min-block-size: 100%;
    }
  }

  .add-new-form {
    .v-field__field {
      border-radius: vuetify.$border-radius-root;
      background-color: rgb(var(--v-theme-surface));
    }
  }
}
</style>
