(function(api) {

    api.sectionConstructor['frosty-cake-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const frosty_cake_section_lists = ['banner', 'service'];
    frosty_cake_section_lists.forEach(frosty_cake_homepage_scroll);

    function frosty_cake_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('frosty_cake_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);