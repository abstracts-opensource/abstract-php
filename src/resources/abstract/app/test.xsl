<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/abstract/collection">
        <html>
            <header>
                <xsl:processing-instruction name="xml-stylesheet">
                href="style.css" type="text/css"
                </xsl:processing-instruction>
            </header>
            <body>
                <table border="1">
                    <tr>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Year</th>
                    </tr>
                    <xsl:for-each select="movie">
                        <xsl:choose>
                            <xsl:when test="title = 'Happy Gilmore'">
                                <tr>
                                    <td>
                                        <abstract>
                                            <xsl:value-of select="title"/>
                                        </abstract>
                                    </td>
                                    <td>
                                        <xsl:value-of select="genre"/>
                                    </td>
                                    <td>
                                        <xsl:value-of select="year"/>
                                    </td>
                                </tr>
                            </xsl:when>
                            <xsl:otherwise>
                                <tr>
                                    <td>
                                        <xsl:value-of select="title"/>
                                    </td>
                                    <td>
                                        <xsl:value-of select="genre"/>
                                    </td>
                                    <td>
                                        <xsl:value-of select="year"/>
                                    </td>
                                </tr>
                            </xsl:otherwise>
                        </xsl:choose>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>