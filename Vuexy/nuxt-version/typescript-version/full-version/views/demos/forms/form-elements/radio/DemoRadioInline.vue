<script lang="ts" setup>
const columnRadio = ref('radio-1')
const inlineRadio = ref('radio-1')
</script>

<template>
  <VRadioGroup v-model="columnRadio">
    <VRadio
      :id="useId()"
      label="Option 1"
      value="radio-1"
    />
    <VRadio
      :id="useId()"
      label="Option 2"
      value="radio-2"
    />
  </VRadioGroup>

  <VDivider class="my-4" />

  <VRadioGroup
    v-model="inlineRadio"
    inline
  >
    <VRadio
      :id="useId()"
      label="Option 1"
      value="radio-1"
    />
    <VRadio
      :id="useId()"
      label="Option 2"
      value="radio-2"
    />
  </VRadioGroup>
</template>
