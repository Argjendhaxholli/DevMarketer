var app = new Vue({
  el: '#app',
  data: {
    seen: false,
    password_options: 'keep',
    isVisible: false,
    permissionsSelected: [],
    auto_password: true,
    // rolesSelected: [{{!! old('roles') ? old('roles') : '' !!}}]
    permissionType: 'basic',
    resource: '',
    crudSelected: ['create', 'read', 'update', 'delete'],
    title: '',
    slug: '',
  },
  methods: {
    crudName: function(item) {
      return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
    },
    crudSlug: function(item) {
      return item.toLowerCase() + "-" + app.resource.toLowerCase();
    },
    crudDescription: function(item) {
      return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
    },
    updateSlug: function(val) {
      this.slug = val;
    }
  }
});
