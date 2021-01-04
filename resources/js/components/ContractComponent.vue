<template>
    <div>
        <div class="accordion accordion-flush" id="accordionFlush1">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapseOne">
                        Encabezado
                    </button>
                </h2>
                <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush1">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur eveniet consectetur nostrum cum aliquid tempora. Ad optio consequatur numquam pariatur molestias delectus velit veniam debitis dolorem quae! Excepturi, harum eveniet!</p>
                    </div>
                </div>
            </div>
        </div>
        <pre>
            @{{ $componentTypes }}
        </pre>
    </div>
</template>
<script>
    export default {
        props: ['componentTypes'],
        data() {
            return {
                componentTypes: []
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
