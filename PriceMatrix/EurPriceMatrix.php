<?php
namespace Publero\AppleMobileBundle\PriceMatrix;

/**
 * @author Martin Hlaváč <info@mhlavac.net>
 */
class EurPriceMatrix extends PriceMatrix
{
    public function getCurrency()
    {
        return 'EUR';
    }

    public function getPrices()
    {
        return array(1 => 0.79, 1.59, 2.39, 2.99, 3.99, 4.99, 5.49, 5.99, 6.99, 7.99, 8.99,
                9.99, 10.49, 10.99, 11.99, 12.99, 13.99, 14.49, 14.99, 15.99,
                16.99, 17.99, 18.49, 18.99, 19.99, 20.99, 21.49, 21.99, 22.99,
                23.99, 24.99, 25.49, 25.99, 26.99, 27.99, 28.99, 29.49, 29.99,
                30.99, 31.99, 32.99, 33.49, 33.99, 34.99, 35.99, 36.99, 37.49,
                37.99, 38.99, 39.99, 42.99, 44.99, 49.99, 54.99, 59.99, 62.99,
                64.99, 69.99, 74.99, 79.99, 84.99, 89.99, 94.99, 99.99, 109.99,
                119.99, 124.99, 129.99, 139.99, 149.99, 159.99, 169.99, 179.99,
                189.99, 199.99, 239.99, 279.99, 319.99, 359.99, 399.99, 479.99,
                559.99, 639.99, 719.99, 799.99);
    }

    public function getProceeds()
    {
        return array(1 => 0.48, 0.97, 1.45, 1.82, 2.43, 3.04, 3.34, 3.65, 4.25, 4.86, 5.47,
                6.08, 6.39, 6.69, 7.3, 7.91, 8.52, 8.82, 9.12, 9.73, 10.34,
                10.95, 11.25, 11.56, 12.17, 12.78, 13.08, 13.39, 13.99, 14.6,
                15.21, 15.52, 15.82, 16.43, 17.04, 17.65, 17.95, 18.25, 18.86,
                19.47, 20.08, 20.39, 20.69, 21.3, 21.91, 22.52, 22.82, 23.12,
                23.73, 24.34, 26.17, 27.39, 30.43, 33.47, 36.52, 38.34, 39.56,
                42.6, 45.65, 48.69, 51.73, 54.78, 57.82, 60.86, 66.95, 73.04,
                76.08, 79.12, 85.21, 91.3, 97.39, 103.47, 109.56, 115.65,
                121.73, 146.08, 170.43, 194.78, 219.12, 243.47, 292.17, 340.86,
                389.56, 438.25, 486.95);
    }
}
