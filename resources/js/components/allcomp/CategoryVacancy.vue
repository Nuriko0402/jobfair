<template>
    <div>
        <h4 class="oswald">Категории</h4>
        <div class="row gutter">
            <div class="col-md-2 categoties" v-for="category in categories" :key="category.id">
                <button class="btn category radius">{{ category.name }}</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        data: {
            type: Array,
            default: () => [],
        }
    },
    data(){
        return {
            search:'',
            categories: [
                {
                    id: 1,
                    name: 'Архитектура'
                },
                {
                    id: 2,
                    name: 'Строительство'
                },
                {
                    id: 3,
                    name: 'Дизайн'
                },
                {
                    id: 4,
                    name: 'Дизайн одежды'
                },
                {
                    id: 5,
                    name: 'Инженер'
                },
                {
                    id: 6,
                    name: 'Электрик'
                }
            ]
        }
    },
    // computed:{
    //     categories: function() {
    //         return this.data.filter((category) => {
    //             return category.name.match(this.search);
    //         })
    //     }
    // }
}
</script>
<style>
    .categoties button {
        min-width: 100%;
        margin-bottom: .6rem;
    }
</style>