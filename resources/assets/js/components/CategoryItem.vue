<template>
    <div>
         <li><a :href='"/categories/" + category.id + "/" + category.slug'>{{ category.name }}</a></li>
    </div>
</template>

<script>
    export default {
        props: ['category']
    }
</script>
