<script setup lang="ts">
const toggleCheckbox = ref(true)
const toggleIndeterminateCheckbox = ref(true)
const disabledCheckbox = ref(true)
const toggleOffCheckbox = ref(false)
</script>

<template>
  <div class="demo-space-x">
    <VCheckbox
      :id="useId()"
      v-model="toggleCheckbox"
      label="On"
    />

    <VCheckbox
      :id="useId()"
      v-model="toggleOffCheckbox"
      label="Off"
    />

    <VCheckbox
      :id="useId()"
      v-model:indeterminate="toggleIndeterminateCheckbox"
      v-model="toggleIndeterminateCheckbox"
      label="Indeterminate"
    />

    <VCheckbox
      :id="useId()"
      :model-value="disabledCheckbox"
      disabled
      label="On disabled"
    />

    <VCheckbox
      :id="useId()"
      disabled
      label="Off disabled"
    />
  </div>
</template>
