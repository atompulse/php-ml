<?php

namespace Phpml\SupportVectorMachine;

class DataTransformer
{
    /**
     * @param array $samples
     * @param array $labels
     * @param bool  $targets
     *
     * @return string
     */
    public static function trainingSet(array $samples, array $labels, $targets = false)
    {
        $set = '';
        if (!$targets) {
            $numericLabels = self::numericLabels($labels);
        }
        foreach ($labels as $index => $label) {
            $set .= sprintf('%s %s %s', $targets ? $label : $numericLabels[$label], self::sampleRow($samples[$index]), PHP_EOL);
        }
        return $set;
    }
    /**
     * @param array $samples
     *
     * @return string
     */
    public static function testSet(array $samples)
    {
        if (!is_array($samples[0])) {
            $samples = [$samples];
        }
        $set = '';
        foreach ($samples as $sample) {
            $set .= sprintf('0 %s %s', self::sampleRow($sample), PHP_EOL);
        }
        return $set;
    }
    /**
     * @param string $rawPredictions
     * @param array  $labels
     *
     * @return array
     */
    public static function predictions($rawPredictions, array $labels)
    {
        $numericLabels = self::numericLabels($labels);
        $results = [];
        foreach (explode(PHP_EOL, $rawPredictions) as $result) {
            if (strlen($result) > 0) {
                $results[] = array_search($result, $numericLabels);
            }
        }
        return $results;
    }
    /**
     * @param array $labels
     *
     * @return array
     */
    public static function numericLabels(array $labels)
    {
        $numericLabels = [];
        foreach ($labels as $label) {
            if (isset($numericLabels[$label])) {
                continue;
            }
            $numericLabels[$label] = count($numericLabels);
        }
        return $numericLabels;
    }
    /**
     * @param array $sample
     *
     * @return string
     */
    private static function sampleRow(array $sample)
    {
        $row = [];
        foreach ($sample as $index => $feature) {
            $row[] = sprintf('%s:%s', $index + 1, $feature);
        }
        return implode(' ', $row);
    }
}