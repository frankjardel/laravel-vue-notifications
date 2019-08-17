<template>
	<div>
		Pedidos ({{ notifications.length }})

		<notification
			v-for="notification in notifications" 
			:key="notification.id"
			:notification="notification">
		</notification>

		<a href="#" @click.prevent="markAllAsRead()">
			Limpar Notificações
		</a>
	</div>
</template>

<script>
export default {
	created () {
		this.$store.dispatch('loadNotifications')
	},

	computed: {
		notifications () {
			return this.$store.state.notifications.items
		}
	},

	methods: {
		markAllAsRead () {
			this.$store.dispatch('markAllAsRead')
		}
	}
}
</script>