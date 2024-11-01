<template>
  <h1>Laravel</h1>
  <div v-for="profile in profiles">
    <p>{{ profile.name }}</p>
    <p>{{ profile.phone }}</p>
  </div>
</template>
<script>
  import gql from 'graphql-tag'

  export default {
    data() {
      return {
        profiles: []
      }
    },
    apollo: {
      profiles: gql`{
        id
        name
        phone
      }`
    }
  }
</script>