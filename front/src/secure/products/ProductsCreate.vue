<template>
    <main class="w-100">
        <form class="form-signin" @submit.prevent="submit">
            <h1 class="h3 mb-3 fw-normal">Please register</h1>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="" name="title" required v-model="title">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" required v-model="description"></textarea>
            </div>

            <div class="form-group">
                <label>Image</label>
                
                <div class="input-group-append">
                    <input type="text" class="form-control" name="image" required v-model="image">
                    <ImageUpload @file-upload="image = $event"/>
                </div>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" required v-model="price">
            </div>
            
            <div class="mt-4">
                <button class="btn btn-outline-secondary">Save</button>
            </div>
        </form>
    </main>
</template>

<script lang="ts">
import {ref} from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';
import ImageUpload from '@/secure/components/ImageUpload.vue';

export default {
    name: "ProductsCreate",
    components: { ImageUpload },
    setup() {
        const title = ref('');
        const description = ref('');
        const image = ref('');
        const price = ref(0);
        const router = useRouter();

        const submit = async ()  => {
            await axios.post('products', {
                title: title.value,
                description: description.value,
                image: image.value,
                price: price.value
            });

            await router.push('/products');
        }

        return {
            title,
            description,
            image,
            price,
            submit
        }
    }
}
</script>

<style>

</style>