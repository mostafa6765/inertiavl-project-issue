<template>

    <div>
      This is the about page: {{ foo }}

      <div class="">
        <inertia-link href="/contact" method="get">Contact Page >> inertia link</inertia-link>
      </div>
      <div class="">
        <a href="/contact">contact page >> normal anchor tag</a>
      </div>
      <div class="">
        <button type="button" name="button" @click="contactPage()">Contact onclick</button>
      </div>
    </div>

</template>

<script>

export default {
 props: ['foo'],
 created: function () {
   console.log('created')
 },
 methods: {
   contactPage: function () {
     this.$inertia.reload({
       method: 'get',
       data: {
         name: 'kamal'
       }
     })
   }
 }
}
</script>
