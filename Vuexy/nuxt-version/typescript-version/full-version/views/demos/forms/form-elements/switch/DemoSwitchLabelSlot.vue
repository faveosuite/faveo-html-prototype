<script lang="ts" setup>
const switchMe = ref(false)
</script>

<template>
  <VSwitch
    :id="useId()"
    v-model="switchMe"
  >
    <template #label>
      Turn on the progress: <VProgressCircular
        :indeterminate="switchMe"
        class="ms-2"
      />
    </template>
  </VSwitch>
</template>
