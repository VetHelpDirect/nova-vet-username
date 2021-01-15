Nova.booting((Vue, router, store) => {
  Vue.component('index-vet-username', require('./components/IndexField'))
  Vue.component('detail-vet-username', require('./components/DetailField'))
  Vue.component('form-vet-username', require('./components/FormField'))
})
