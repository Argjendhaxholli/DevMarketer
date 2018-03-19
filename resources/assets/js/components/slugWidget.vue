<style scoped>
  .slug-widget-content {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-top: 10px;
  }
  .wrapper {
    margin-left: 8px;
  }
  .slug {
    background-color: #fdfd96;
  }
</style>



<template>
  <div class="slug-widget">
    <div class="control">
      <input class="input is-primary is-large" type="text" placeholder="Post Title" v-model="title">
    </div>
    <div class="slug-widget-content">
      <div class="icon-wrapper wrapper">
        <i class="fa fa-link"></i>
      </div>

      <div class="url-wrapper wrapper">
        <span class="root-url">{{url}}</span>
        <span class="subdirectory-url">{{subdirectory}}</span>
        <span class="slug" v-show="slug && !isEditing">{{slug}}</span>
        <span class="slug" v-show="isEditing"><input type="text" name="slug" v-model="customSlug"></span>
      </div>

      <div class="button-wrapper wrapper">
        <button class="button is-small" v-show="!isEditing" @click.prevent="editSlug">Edit</button>
        <button class="button is-small" v-show="isEditing" @click.prevent="saveSlug">Save</button>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
      props: {
        url: {
            type: String,
            required: true
        },
        subdirectory: {
          type: String,
          required: true
        },
        title: {
          type: String,
          required: true
        }
      },
      data: function(){
        return {
          slug: this.convertTtitle(),
          isEditing: false,
          customSlug:  '',
          wasEdited: false
        }
      },
      methods: {
        convertTtitle: function() {
          return Slug(this.title)
        },
        editSlug: function() {
          this.customSlug = this.slug;
          this.isEditing = true;
        },
        saveSlug: function() {
          this.wasEdited = true;
          this.slug = Slug(this.customSlug);
          this.$emit('save-custom-slug', this.slug);
          this.isEditing = false;
        }
      },
      watch: {
          title: _.debounce(function() {
              this.slug = this.convertTtitle()
          }, 250),
          slug: function(val) {
            this.$emit('slug-changed', this.slug)
          }
      }
    }
</script>
