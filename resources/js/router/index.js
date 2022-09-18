import createRouter from '@spaceavocado/svelte-router';
import notFound from '../component/NotFound.svelte';
import student from '../student/index.svelte';
import studentCreate from '../student/create.svelte';

const routes = [
    {
        path: '/',
        component: student,
    },
    {
        path: '/create',
        component: studentCreate,
    },
    // {
    //     path: '*',
    //     component: notFound
    // }
]

const router = createRouter({
    routes,
})

export default router