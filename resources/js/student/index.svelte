<script>
    import { router } from '@spaceavocado/svelte-router'
    const create = () => {
        $router.push('/create');
    }
</script>
<h1>Student</h1>
<button on:click="{create}">Create</button>