<template>
	<div>
		<a href="#">
			<span @click.prevent="markAsRead(notification.id)">Lida</span>
			: {{ notification.data.order.order }} - {{ notification.id }}
		</a>
	</div>
</template>

<script>
export default {
	props: ['notification'],

	computed: {
		order() {
			console.log(this.notification.data.order)
			return this.notification.data.order
		}
	},

	methods: {
		markAsRead (idNotification) {
			this.$store.dispatch('markAsRead', {id: idNotification})
		}
	}
}
</script>