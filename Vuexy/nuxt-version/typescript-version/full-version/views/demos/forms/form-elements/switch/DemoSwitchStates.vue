<script setup lang="ts">
const switchOn = ref('on')
const switchOnDisabled = ref('on')
const switchOnLoading = ref(true)
</script>

<template>
  <div class="demo-space-x">
    <VSwitch
      :id="useId()"
      v-model="switchOn"
      value="on"
      label="On"
    />

    <VSwitch
      :id="useId()"
      label="Off"
    />

    <VSwitch
      :id="useId()"
      v-model="switchOnDisabled"
      value="on"
      disabled
      label="On disabled"
    />

    <VSwitch
      :id="useId()"
      disabled
      label="Off disabled"
    />

    <VSwitch
      :id="useId()"
      v-model="switchOnLoading"
      loading="warning"
      :label="`${switchOnLoading ? 'On' : 'Off'} loading`"
    />
  </div>
</template>
