<script lang="ts" setup>
const selected = ref(['John'])
</script>

<template>
  <div class="demo-space-x">
    <VCheckbox
      :id="useId()"
      v-model="selected"
      label="John"
      value="John"
    />

    <VCheckbox
      :id="useId()"
      v-model="selected"
      label="Jacob"
      color="success"
      value="Jacob"
    />

    <VCheckbox
      :id="useId()"
      v-model="selected"
      label="Johnson"
      color="info"
      value="Johnson"
    />
  </div>

  <p class="mt-1">
    {{ selected }}
  </p>
</template>
