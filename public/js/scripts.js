'use strict';

var app = {
    checkLoaded: function () {
        this.releaseApp();
    },

    releaseApp: function () {
        pageLoader();
    },

    categoryDelete: function (id) {
        if ($('#formCategoryDelete').length <= 0 || parseInt(id) <= 0) {
            return false;
        }

        $('#formCategoryDelete').attr('action', '/categories/' + id);
        $('#formCategoryDelete').submit();
    },

    itemDelete: function (id) {
        if ($('#formItemDelete').length <= 0 || parseInt(id) <= 0) {
            return false;
        }

        $('#formItemDelete').attr('action', '/items/' + id);
        $('#formItemDelete').submit();
    }
};

$(document).ready(function(){
    if (jQuery) {
        app.checkLoaded();
    }

    if ($('#queryFilterCategories').length > 0) {
        if ($('#queryFilterCategories').val().length > 0) {
            $('#buttonFilterCategories').trigger('click');
            $('#queryFilterCategories').trigger('focus');
        }

        $('#queryFilterCategories').keypress(function (e) {
            if (e.which == 13) {
                $('#formFilterCategories').submit();
                return false;
            }
        });

        $('#resetFilterCategories').click(function () {
            $('#queryFilterCategories').val('');
            $('#formFilterCategories').submit();
        });
    }

    if ($('#categoriesFilterItems').length > 0) {
        $('#categoriesFilterItems').change(function(){
            $('#formFilterItems').submit();
        });
    }

    if ($('#queryFilterItems').length > 0) {
        if ($('#queryFilterItems').val().length > 0) {
            $('#buttonFilterItems').trigger('click');
            $('#queryFilterItems').trigger('focus');
        }

        $('#queryFilterItems').keypress(function (e) {
            if (e.which == 13) {
                $('#formFilterItems').submit();
                return false;
            }
        });

        $('#resetFilterItems').click(function () {
            $('#queryFilterItems').val('');
            $('#formFilterItems').submit();
        });
    }
});