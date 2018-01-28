<template>
    <ul>
        <CategoryItem v-for="category in categories" :category="category" :key="category.id"></CategoryItem>
    </ul>
</template>

<script>

    import CategoryItem from './CategoryItem.vue';


    export default {

        components : {
            CategoryItem
        },

        data() {
            return {
                categories: ''
            }
        },

        mounted() {
            console.log('Component mounted.')
            this.fetchData();
        },

        methods: {
            fetchData() {
                axios.get('/categories').then((categories) => {

                    console.log(categories.data);
                    this.categories = categories.data;

                });
            }
        }
    }
</script>
