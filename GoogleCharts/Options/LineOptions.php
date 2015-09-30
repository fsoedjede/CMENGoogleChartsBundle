<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class LineOptions extends AdvancedChartOptions
{
    /**
     * The on-and-off pattern for dashed lines. For instance, [4, 4] will repeat 4-length dashes followed by 4-length
     * gaps, and [5, 1, 3] will repeat a 5-length dash, a 1-length gap, a 3-length dash, a 5-length gap, a 1-length
     * dash, and a 3-length gap. See Dashed Lines for more information.
     *
     * @var int[]
     */
    protected $lineDashStyle;

    /**
     * Data line width in pixels. Use zero to hide all lines and show only the points. You can override values for
     * individual series using the series property.
     *
     * @var int
     */
    protected $lineWidth;

    /**
     * The shape of individual data elements: 'circle', 'triangle', 'square', 'diamond', 'star', or 'polygon'.
     *
     * @var string
     */
    protected $pointShape;

    /**
     * Diameter of displayed points in pixels. Use zero to hide all points. You can override values for individual
     * series using the series property. If you're using a trendline, the pointSize option will affect the width of
     * the trendline unless you override it with the trendlines.n.pointsize option.
     *
     * @var int
     */
    protected $pointSize;

    /**
     *  Determines whether points will be displayed. Set to false to hide all points. You can override values for
     * individual series using the series property. If you're using a trendline, the pointsVisible option will affect
     * the visibility of the points on all trendlines unless you override it with the trendlines.n.pointsVisible option.
     *
     * This can also be overridden using the style role in the form of "point {visible: true}".
     *
     * @var boolean
     */
    protected $pointsVisible;

    /**
     * @var AdvancedTooltip
     */
    protected $tooltip;


    public function __construct()
    {
        parent::__construct();

        $this->tooltip = new AdvancedTooltip();
    }


    /**
     * @return AdvancedTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @param int $lineWidth
     */
    public function setLineWidth($lineWidth)
    {
        $this->lineWidth = $lineWidth;
    }

    /**
     * @param int[] $lineDashStyle
     */
    public function setLineDashStyle($lineDashStyle)
    {
        $this->lineDashStyle = $lineDashStyle;
    }

    /**
     * @param string $pointShape
     */
    public function setPointShape($pointShape)
    {
        $this->pointShape = $pointShape;
    }

    /**
     * @param int $pointSize
     */
    public function setPointSize($pointSize)
    {
        $this->pointSize = $pointSize;
    }

    /**
     * @param boolean $pointsVisible
     */
    public function setPointsVisible($pointsVisible)
    {
        $this->pointsVisible = $pointsVisible;
    }
}