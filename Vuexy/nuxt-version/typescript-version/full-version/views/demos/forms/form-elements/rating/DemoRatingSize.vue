<script lang="ts" setup>
const rating = ref(4)
</script>

<template>
  <div class="d-flex flex-column">
    <ClientOnly>
      <VRating
        v-model="rating"
        size="x-small"
      />

      <ClientOnly>
        <VRating
          v-model="rating"
          size="small"
        />

        <ClientOnly>
          <VRating
            v-model="rating"
            size="large"
          />
        </clientonly>
      </clientonly>
    </clientonly>
  </div>
</template>
