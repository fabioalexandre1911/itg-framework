const Admin = {
  adminToggleTabs: () => {
    jQuery("[admin-tab-target]").on("click", function (event) {
      event.preventDefault();

      const element = jQuery(this);
      const target = element.attr("admin-tab-target");

      if (!element.hasClass("active")) {
        jQuery("[admin-tab-target]").removeClass("active");
        jQuery(".sfwp-admin-content__tabs-item").slideUp();
        element.addClass("active");
        jQuery(
          `.sfwp-admin-content__tabs-item[admin-tab-container=${target}]`
        ).slideDown();
      }
    });
  },
  init: () => {
    Admin.adminToggleTabs();
  },
};
export default Admin;
