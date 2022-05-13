$(() => {

    function addRowHandlers() {
        for (let i = 0; i < tableRows.length; i++) {
            tableRows[i].onclick = function () {
                return function () {
                    window.location = "businessProfile.php";
                };
            }
            (tableRows[i]);
        }
    }

    function InstantiateTableFiltering() {

        let table = $('#myTable').DataTable({
            "dom": '<"top"f>rt<"bottom"p><"clear">',
            "lengthChange": false,
            "info": false
        });

        $(".top").prepend('<div class="form-check form-switch me-auto" id="mustHaveCheckbox" data-bs-html="true" data-bs-placement="right" data-bs-toggle="popover" data-bs-trigger="hover focus"\n' +
            '             title="Businesses that meet the following criteria:" data-bs-content="\n' +
            '● Less than 20% of the plastic used is single-use plastic<br>\n' +
            '● Over 80% of waste is recycled. Business uses a food collection scheme<br>\n' +
            '● Business is carbon neutral<br>\n' +
            '● Business uses renewable energy">\n' +
            '            <input class="form-check-input" type="checkbox" id="mustHaveFilter">\n' +
            '            <label class="form-check-label" for="mustHaveFilter">Must Have</label>\n' +
            '        </div>');

        popover = bootstrap.Popover.getOrCreateInstance(document.getElementById('mustHaveCheckbox')); // Returns a Bootstrap popover instance

        addRowHandlers();

        return table;
    }

    let nonMustHave = $('table > :not(thead) > tr:not(.mustHave)'); // Rows that are not in the must-have criteria
    let tableRows = $('table > :not(thead) > tr'); // Table rows without the header
    let popover;

    let tableFiltering = InstantiateTableFiltering();

    // MUST-HAVE SWITCH TOGGLE
    $(document).on('change', '#mustHaveFilter', function () {
        if (this.checked) {
            tableFiltering.destroy();
            popover.dispose();

            nonMustHave.detach();
            tableFiltering = InstantiateTableFiltering();
            document.getElementById("mustHaveFilter").checked = true;
        } else {
            tableFiltering.destroy();
            popover.dispose();

            nonMustHave.appendTo("tbody");
            tableFiltering = InstantiateTableFiltering();
        }
    });

});