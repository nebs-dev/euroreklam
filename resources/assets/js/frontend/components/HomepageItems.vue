<template>
  <div>

    <h2>Random items</h2>

    <ul>
      <li v-for="item in localItems">
        {{ item.naziv }}
      </li>
    </ul>

    <button @click="getHomepageItems">Refresh items</button>
  </div>
</template>

<script>

  export default {
    props: ['items'],

    data: function () {
      return {
        localItems: this.items
      }
    },

    methods: {
      getHomepageItems() {
        this.$http
        .get('http://localhost:8000/api/items/random').then((data) => {
          this.localItems = data.body
        }, (err) => {
          console.log(err)
        })
      }
    }
  }

</script>

<style></style>
