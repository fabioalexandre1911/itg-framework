const Header = {
  openSearchForm: () => {
    jQuery(".sfwp-header__search").on("click", function (event) {
      event.preventDefault();
      jQuery(".sfwp-header__searchform").slideToggle();
    });
  },
  init: () => {
    Header.openSearchForm();
  },
};
export default Header;
