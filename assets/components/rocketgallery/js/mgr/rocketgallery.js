var RocketGallery = function(config) {
    config = config || {};
    RocketGallery.superclass.constructor.call(this,config);
};
Ext.extend(RocketGallery,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('rocketgallery',RocketGallery);
RocketGallery = new RocketGallery();

RocketGallery.combo.PublishStatus = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: [[1, _('published')], [0, _('unpublished')]]
        ,name: 'published'
        ,hiddenName: 'published'
        ,triggerAction: 'all'
        ,editable: false
        ,selectOnFocus: false
        ,preventRender: true
        ,forceSelection: true
        ,enableKeyEvents: true
    });
    RocketGallery.combo.PublishStatus.superclass.constructor.call(this, config);
};
Ext.extend(RocketGallery.combo.PublishStatus, MODx.combo.ComboBox);
Ext.reg('rocketgallery-combo-publish-status', RocketGallery.combo.PublishStatus);

RocketGallery.PanelSpacer = { html: '<br />', border: false, cls: 'rocketgallery-panel-spacer' };
