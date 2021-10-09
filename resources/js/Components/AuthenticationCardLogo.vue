<template>
    <Link :href="'/'">
        <img :src="image" alt="logo" class="w-60">
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';
    import image from '../../image/Instagram_logo.png';
    export default defineComponent({
        components: {
            Link,
        },
        data(){
            return {
                image:image
            };
        }
    })
</script>
