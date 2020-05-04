<?php

namespace YaPro\MarkerInterfaces\Behavioral;

/**
 * Последовательный рабочий процесс.
 * Рабочий процесс, включающий задачи, выполняющиеся в определенной последовательности, когда выполнение одной задачи запускается только после завершения предыдущей.
 */
interface SequentialWorkflowInterface extends BusinessProcessInterface
{
}
