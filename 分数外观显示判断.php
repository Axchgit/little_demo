            <!-- 分数外观显示判断 -->
            <?php if ($row['grade'] == NULL) { ?>
                <td align="center" style="color:yellowgreen;font-weight:bolder">
                    待评分
                </td>
            <?php } elseif ($row['grade'] >= 60) { ?>
                <td align="center" style="color: green;font-weight:bolder">
                    <?php echo $row['grade'] ?>
                </td>
            <?php } else { ?>
                <td align="center" style="color: red;font-weight:bolder">
                    <?php echo $row['grade'] ?>
                </td>
            <?php  } ?>