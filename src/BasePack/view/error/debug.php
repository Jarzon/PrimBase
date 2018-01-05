<div class="container">
    <h1 class="alignCenter">Debug</h1>

    <div style="text-align: center;">
        <h2>Exception Occured:</h2>
        <table>
            <tr>
                <th>Type</th>
                <td><?=get_class( $error )?></td>
            </tr>
            <tr>
                <th>Message</th>
                <td><?=$error->getMessage()?></td>
            </tr>
            <tr>
                <th>File</th>
                <td><?=$error->getFile()?></td>
            </tr>
            <tr>
                <th>Line</th>
                <td><?=$error->getLine()?></td>
            </tr>
        </table>
    </div>
</div>