<template>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-globe"></i> Notification
            <span class="badge badge-danger"
                  id="count-notification">{{ lessons.length}}</span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" v-for="lesson in lessons">
                {{ lesson.data}}
            </a>
<!--            <div role="separator" class="dropdown-divider" ></div>-->
            <a class="dropdown-item" href="#" v-if="lessons.length==0">No Notification</a>
        </div>
    </li>

</template>

<script>
    export default {
        props: ['lessons'],
        // name: "LessonNotification"
    }
</script>

<style scoped>

</style>
