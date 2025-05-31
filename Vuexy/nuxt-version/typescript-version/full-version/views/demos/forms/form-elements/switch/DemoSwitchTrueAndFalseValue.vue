<script lang="ts" setup>
const switch1 = ref(1)
const switch2 = ref('Show')
</script>

<template>
  <div class="demo-space-x">
    <VSwitch
      :id="useId()"
      v-model="switch1"
      :label="switch1.toString()"
      :true-value="1"
      :false-value="0"
    />

    <VSwitch
      :id="useId()"
      v-model="switch2"
      :label="switch2.toString()"
      true-value="Show"
      false-value="Hide"
    />
  </div>
</template>
