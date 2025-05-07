<p>You have received a new form submission from <strong><?= html($Name) ?></strong>:</p>

<table cellspacing="0" cellpadding="3">
    <tr valign="top">
        <th style="text-align: left; padding-left: 0;">Name:</th>
        <td><?= html($Name) ?></td>
    </tr>
    <tr valign="top">
        <th style="text-align: left; padding-left: 0;">Phone:</th>
        <td><?= html($Phone) ?></td>
    </tr>
    <tr valign="top">
        <th style="text-align: left; padding-left: 0;">Email:</th>
        <td><a href="mailto:<?= html($Email) ?>"><?= html($Email) ?></a></td>
    </tr>
    <tr valign="top">
        <th style="text-align: left; padding-left: 0;">Inquiry type:  </th>
        <td><?= html($InquiryDestination) ?></td>
    </tr>
    <tr valign="top">
        <th style="text-align: left; padding: 12px 0 0;">Message:</th>
    </tr>
</table>

<p><?= nl2br(html($Message)) ?></p>
