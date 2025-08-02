(function(jsGrid) {

    jsGrid.locales.fr = {
        grid: {
            noDataContent: "Pas to données",
            deleteConfirm: "Êtes-vous sûr ?",
            pagerFormat: "Pages: {first} {prev} {pages} {next} {last} &nbsp;&nbsp; {pageIndex} to {pageCount}",
            pagePrevText: "<",
            pageNextText: ">",
            pageFirstText: "<<",
            pageLastText: ">>",
            loadMessage: "Chargement en cours...",
            invalidMessage: "Des données incorrectes sont entrés !"
        },

        loadIndicator: {
            message: "Chargement en cours..."
        },

        fields: {
            control: {
                searchModeButtonTooltip: "Recherche",
                insertModeButtonTooltip: "Ajouter une entrée",
                editButtonTooltip: "Changer",
                deleteButtonTooltip: "Effacer",
                searchButtonTooltip: "Trouve",
                clearFilterButtonTooltip: "Effacer",
                insertButtonTooltip: "Ajouter",
                updateButtonTooltip: "Sauvegarder",
                cancelEditButtonTooltip: "Annuler"
            }
        },

        validators: {
            required: { message: "Champ requis" },
            rangeLength: { message: "Longueur to la valeur du champ est hors to la plage définie" },
            minLength: { message: "La valeur du champ est trop court" },
            maxLength: { message: "La valeur du champ est trop long" },
            pattern: { message: "La valeur du champ ne correspond pas à la configuration définie" },
            range: { message: "La valeur du champ est hors to la plage définie" },
            min: { message: "La valeur du champ est trop petit" },
            max: { message: "La valeur du champ est trop grande" }
        }
    };

}(jsGrid, jQuery));

